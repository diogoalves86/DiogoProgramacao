#!/usr/bin/python
#-*-coding=utf8-*-

__author__ = 'Diogo Alves'
__description__ = "Este script foi criado com o intuito de facilitar e automatizar algumas tarefas diárias minhas (Diogo Alves)"

import subprocess

class VarDumper:
    def altera_comando(self, novoValor):
        self.comando = novoValor

    def executa_comando(self, comando):
        processo = subprocess.check_output([comando], shell=True)
        return processo

    def verifica_antes_commitar(self):
        if "var_dump(" in self.processo:
            print("Foi detectado um var_dump() no seu código!")
            print("Estas alterações ainda não foram salvas, atente-se para alterá-las antes de commitar!")
            print("COMANDO DIGITADO: \"git diff .\". OUTPUT SEGUE ABAIXO: \n")
            print(self.processo + "\n")
            print("Aplicação encerrada.")
            exit()

    def verifica_commit(self):
        if "var_dump(" in self.processo:
            print("Foi detectado uma função var_dump() no seu ultimo commit.")
            print("Atente-se para corrigi-lo! Segue abaixo o commit para verificar e corrigir. \n")
            print(self.processo)
        else:
            print("O seu código não apresenta var_dump()")

    def var_dump_finder(self):
        self.processo = self.executa_comando("git show")
        self.hash = self.processo[7:48]
        self.processo = self.executa_comando("git diff .")
        self.verifica_antes_commitar()
        self.processo = self.executa_comando("git show %s" % self.hash)
        self.verifica_commit()


verificaVarDamp = VarDumper()
verificaVarDamp.var_dump_finder()

