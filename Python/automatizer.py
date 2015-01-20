#!/usr/bin/python
#-*-coding=utf8-*-

__author__ = 'Diogo Alves'
__description__ = "Este script foi criado com o intuito de facilitar e automatizar algumas tarefas diárias minhas (Diogo Alves)"

import subprocess

class Automatizer:
    def altera_comando(self, novoValor):
        self.comando = novoValor

    def executa_comando(self, comando):
        self.comando = comando
        processo = subprocess.check_output([self.comando], shell=True)
        return processo

    def processa_texto_por_string(self, stringPesquisada):
        arquivos = []
        textoParcial = self.processo
        #Lógica para a identificação de todos os arquivos modificados
        for i in range(0, self.processo.count(stringPesquisada)):
            indice = textoParcial.find(stringPesquisada)
            textoParcial = textoParcial[indice:]
            nomeArquivo = textoParcial[len(stringPesquisada):]
            nomeArquivo = nomeArquivo[1:nomeArquivo.index("\n")]
            textoParcial = textoParcial[textoParcial.index(nomeArquivo):]
            arquivos.append(nomeArquivo)
        return arquivos

    def verifica_antes_commitar(self):
        self.arquivos = self.processa_texto_por_string("modified:  ")
        for arquivo in self.arquivos:
            print("Processando arquivo: %s" % arquivo)
            processo = self.executa_comando("git diff %s" % arquivo)

            if processo == "":
                processo = self.executa_comando("git diff --cached %s" % arquivo)

            if "var_dump(" in processo:
                print("Foi detectado um var_dump() no seu código!")
                print("Estas alterações ainda não foram salvas, atente-se para alterá-las antes de commitar!")
                print("COMANDO DIGITADO: \"%s\". OUTPUT SEGUE ABAIXO: \n" % self.comando)
                print(processo + "\n")
                print("Arquivo %s processado" % arquivo)
                print("Aplicação encerrada.")
                exit()
            else:
                #resposta = input("Não foi encontrado var_dump() no seu código, deseja commitá-lo ? (s) ou (n)")
                return False


    def verifica_commit(self):
        if "var_dump(" in self.processo:
            print("Foi detectado uma função var_dump() no seu ultimo commit.")
            print("""Atente-se para corrigi-lo! Segue abaixo o commit para verificar e corrigir.
            Commit Hash: %s
                  """ % self.commitHash)
        else:
            print("O seu código não apresenta var_dump()")

    def var_dump_finder(self):
        self.processo = self.executa_comando("git status")
        self.verifica_antes_commitar()
        self.processo = self.executa_comando("git show")
        self.commitHash = self.processo[7:48]
        self.processo = self.executa_comando("git diff --cached")
        self.processo = self.executa_comando("git show %s" % self.commitHash)
        self.verifica_commit()


automatizer = Automatizer()
automatizer.var_dump_finder()

