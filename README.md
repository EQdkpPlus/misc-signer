misc-signer
===========

This tools helps you signing the EQdkp Plus Packages.

## HTML variant
The HTML files are for running in your Browser. The keys and data will not leave your PC.
Just open the HTML-File in your local Browser.

### Installation ###
Download this repository and save it to a folder on your local PC. Open then the file you want in your local browser.
Please keep in mind that you need the included JavaScript files in the folder, therefore please download not just the HTML-files, but the whole html folder.

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
