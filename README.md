misc-signer
===========

This tools helps you signing the EQdkp Plus Packages.

## HTML variant
The HTML file is for running in your Browser. The keys and data will not leave your PC.
Just open the HTML-File in your local Browser.

### Files
* signer.html - Sign a specific hash, that you have copied from the repository
* decryptor.html - Decrypt encrypted data, like credentials, with your private key

## PHP variant
The PHP files are for advanced users which need more functionality.

### Installation
* Put the files onto your local server. 
* Edit the file and ajust the path to your private keys folder.

### Important
Please make sure that the private key is never reachable for other users

### Files
* decryptor.php - Decrypt encrypted data, like credentials, with your private key
* signer.php - Sign a specific hash, that you have copied from the repository
* signer_repo.php - Mass sign all unsigned extensions with your private key
* signer_localrepo.php - Mass sign all extensions, on the yearly resign event
