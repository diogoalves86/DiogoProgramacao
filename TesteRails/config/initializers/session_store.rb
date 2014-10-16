# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_TesteRails_session',
  :secret      => '6dca9d798c12c03ba18cd0d3da629112986783f257a4731f0462f014f9eb3167fe0284b99f75bea1a81115c8da1348e541351bf3b3c3ac4e9911c9b8695b16d7'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
