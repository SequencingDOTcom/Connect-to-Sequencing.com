# Connect to Sequencing.com

# Introduction

Connect to Sequencing.com enables sites and apps that generate, process and/or store genetic data to:
* Offer your users a free, one-click option to store a copy of their genetic data at Sequencing.com
  * Storage is free, unlimited and HIPAA-compliant (secure and confidential)
  * We don't sell, trap or exploit the data in any way
* Earn recurring royalties from Sequencing.com

Connect to Sequencing.com codebase allows your site or app to import genetic data files directly into a user accounts at Sequencing.com. Sequencing.com facilitates the process of the import by providing several scenarios for users of your site or app.

Seamless account creation. When a user of the third party site decides he or she wants to connect their genetic data files with Sequencing.com - it is not required for the user to have an account on Sequencing.com beforehand. When the 'Connect to Sequencing.com' button is clicked, a modal window will open stating “A welcome message with further instructions has been sent to your e-mail address.” and showing the screen below

In order to implement “Connect to Sequencing.com” functionality:

1) [Register for a free Sequencing.com account](https://sequencing.com/user/register)
2) [Generate an OAuth2 secret by selecting the "Free" plan](https://sequencing.com/plans)
3) Add the Connect to Sequencing.com code to your site
* Backend integration: provides the features for rendering correct request json string including encryption
* Frontend widget: provides user interface and interaction.

Complete documentation can be found at https://sequencing.com/developer-documentation/connect-to-sequencing.com

# Backend integration

Reffer to file backend.php

JSON String

Information between Sequencing.com and Third party integrations is passed as encrypted json messages. In order to construct valid json string , you will need following key data:

client_id : client secret that can be generated in Sequencing.com under developer center / generate oauth2

email : email of the account, to which the file will be imported

files: array of files that holds following information

# Frontend Widget 

Reffer to file widget.html

The code snippet in this file simply references the javascript code needed for the button to function and introduces new <div> element which will appear as “Connect to Sequencing.com” button

Maintainers
======================================
This repo is actively maintained by [Sequencing.com](https://sequencing.com/). Email the Sequencing.com bioinformatics team at gittaca@sequencing.com with questions and feedback.
