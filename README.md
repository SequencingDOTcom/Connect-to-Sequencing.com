# Connect to Sequencing.com

# Introduction

Sequencing allows third party sites to upload genetic data files to Sequencing.com. Sequencing facilitates the process of the import by providing several scenarios for third party site users

Seamless account creation. When a user of the third party site decides he or she wants to connect their genetic data files with Sequencing - it is not required for the user to have an account on Sequencing beforehand. When connect button is clicked, a modal window will open stating “A welcome message with further instructions has been sent to your e-mail address.” and showing the screen below


In order to implement “Connect to Sequencing” functionality - third party sites are required to complete integration that consist of two parts. Backend integration encompasses the features for rendering correct request json string and encryption of it, whereas frontend widget will take care of user interface and interaction.

Complete documentation can be found at https://sequencing.com/developer-documentation/connect-to-sequencing.com

# Backend integration

Reffer to file backend.php

JSON String

Information between Sequencing and Third party integrations is passed as encrypted json messages. In order to construct valid json string , you will need following key data:

client_id : client secret that can be generated in Sequengin.com under developer center / generate oauth2

email : email of the account, to which the file will be imported

files: array of files that holds following information

# Frontend Widget 

Reffer to file widget.html

The code snippet in this file simply references the javascript code needed for the button to function and introduces new <div> element which will appear as “Connect to Sequencing” button
