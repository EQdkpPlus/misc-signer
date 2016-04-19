misc-signer
===========

## Installation
* Put the files onto your local server. 
* Edit the file and ajust the path to your private keys folder.

## Important
Please make sure that the private key is never reachable for other users

## Files
* decryptor.php - Decrypt encrypted data, like credentials, with your private key
* signer.php - Sign a specific hash, that you have copied from the repository
* signer_repo.php - Mass sign all unsigned extensions with your private key
* signer_localrepo.php - Mass sign all extensions, on the yearly resign event
