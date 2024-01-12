# CP3402 Assignment 2 

This is the repository for our group's assignment 2 final version.<br>
Group members:
* Aditya Vijay
* Tan Beng Siang
* Shreya Ranjan
* Albert Alvaro

This is the README file for Group PA-1 WordPress website.
Through this file we hope to provide a comprehensive overview for important information about our website, how it's set up, staging, deployment, site maintenance and theme development. 

# Website Details
Our website is hosted on [Amazon Web Services LightSail](https://aws.amazon.com/lightsail/) with the domain name https://jcueducation.com/ . The WordPress version used is 6.4.2.

# Website Support


## Deployment Workflow

## Staging and Development
### Staging and Production
- For staging and the production of the website we used localhost through [XAMPP](https://www.apachefriends.org/) that allows us to locally host and design the website, make any changes and we are able to instantly view it.
XAMPP allows us to setup a database that stores all the details about our WordPress where we are able to change and customize it with all the changes immediately appearing. 

XAMPP:
<br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/157db6ef-67e9-4abc-ada1-2a95cd497165)

XAMPP Database Setup:
<br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/4888642b-b3ce-4845-80bf-72c51ebc6211)


### Local Development and Testing
- For the local development we setup Varying Vagrants Vagrant that allows for creating a development environment where we can design our changes and view all the changes, this also allowed us to focus on coding and feature development.
- Using VVV also allowed us for rigorous testing and quality assurance of the website before we go live with the website.

Varying Vagrants Vagrant:

![vvvvvv](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/d649f9c9-940e-4867-b5f9-8708af67aa2c)


![CP3402_vagrant_](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/c6e5a07f-9108-4286-bbd1-83b0f2fac5b9)

![CP3402_vagrant_success](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/317b80a5-c5b7-40b6-9804-4f756d561e7e)

Testing Process:
General Rules
Steps to follow to add/update content:

* For content creation, use accounts associated with one of those three roles: 'Author', 'Contributor', 'Editor'. Unless absolutely necessary, do not use 'Admin' account for creating new content.
* First, Create backup at live server using All-in-one WP Migration, and download backup file (backup-old).
* Import backup-old into localhost and VVV, to set up localhost as staging site.
* Test new content and make sure there are no conflict. After everything is tested out completely, create a new backup file at localhost (new-backup).
* Import new-backup into live site to migrate new content. 
* Keep the backup-old for 30 days until deletion.

Automation
For the purpose of maintenance we use plug-ins present in WordPress that automate the process to reduce manual labour, these include:

Akismet Anti-Spam: Spam Protection: One of the most trusted anti-spam solution for WordPress websites, which protect websites from spam comments and spam contact forms.
Advanced WordPress Reset: Completely clean up database, plug-ins and themes. At the beginning stage of development, when developers are trying out different themes, conflicts error often occur and sometimes they are unfixable, so a quick full clean reset is very useful
Shield Security: Security plugin which provides Bot detection and IP blocking that can help prevent DDoS attacks on the website.
BlogVault: WordPress backup plugin that is used for scheduled/daily backups.

<br><br>
## Details about Project Management
### Project Management
Tools used:

- Trello:
Project Management Tool that we have used to breakdown the project goals into tasks and then manage these tasks for any updates on the project to indicate development progess based on the goal.
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/eb75baa8-90a3-4dba-8b98-3665536569ae)



- Slack:
Messaging app tool that our team used for communicating any important updates, having team discussions and mainly used for integration between GitHub Repository and Trello so that the team can get notifications of any changes and update the Trello board when necessary.
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/1decd19f-06bb-4a2f-981b-1436059321e7)
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/1a11f5c1-9a87-414e-83d2-edcc29db66ff)
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/0e9d461a-db19-4f3f-ba18-f6081dfbe0e5)

- Discord:
Messaging app tool for online group meetings, other important project updates, collaboration works, and sharing resource materials.

![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/743cad0b-740a-49df-a97f-9d9b654ec24a)
 

### Version Control


- GitHub Repository:<br>
For the purpose of Version Control for the different versions of the website along with the theme design code we used GitHub Repository to store the code and created README file's that showcases details about the theme and screenshot images of it that will help allow for further development and can easily be understood by other developers.

Stored PHP Files, HTML, CSS and Js Files.
<br>
Version 1 GitHub Repository:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/5621b4cd-fef1-458a-a096-5c95cb72ce41)

Version 2 GitHub Repository:

![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/6b70cb7f-2ec2-47d8-b0ce-00d0fbed835a)


Version 3/Final Version GitHub Repository:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/4d02e819-d5ce-4974-8d6a-bbf14376b0a3)

- Backup plugin & backup policy
Everyday, admins have to create backup at live server using All-in-one WP Migration Plugin Tool, to download backup file name it as backup-YYYY-MM-DD.
Retention policy: all backup files must keep for 30 days before deletion.
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/22f48452-41a5-46d7-9a91-d63e2538af6b)



## Site

Using Amazon Web Services Lightsail we deployed our website and went live. 
We used Amazon Route 53 to register for a custom domain name that permitted us to acquire HTTPS and SSL Certificates that provide secruity and permits accessibility across all devices.
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/5cbc7f5c-ace6-4cac-b765-30494cfa93a2)
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/789c7bcd-5865-4d4f-8de9-5035bdbebce0)



Plugins Used in the Website:
- ALL IN ONE WP MIGRATION
- Advanced WP Reset
- Akismet Spam Protection
- Shield Security
- Smart Slider 3
- Yoast SEO
- WP Forms Lite

All these plugins greatly aid in maintaining the website as well as provides feedback on where we can improve the site's visibility in Search Engines. For the purpose of SEO - increasing our rank on search engine, the title of our site should relate to treading topics.

Throughout the website we have used multiple calls-to-action to help garner the viewer's attention and reach the website's goal. We will be able to view the statistics of our website through the use of google analytics to understand how much traffic we have generated to the website.
The registration page/form concerns gathering information from user to sign up to the James Cook University's Open House through content present on the site. Upon collecting the user's information, it is stored in a repository with their contact information attributed to each submission. The content display details about the events for the Openhouse.

For registation site, we are using plugin Wordpress Forms to create forms.
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/a093a6e0-1af1-4918-96ef-b63c513c4760)



## Theme 
We have designed three versions of the website. 
With the goals of the website in mind we have articulated the content and calls to action respectively:

1) Version 1: https://github.com/AdityaVijay1/CMS-GroupPA1V1
2) Version 2: https://github.com/AdityaVijay1/CMS-GroupPA1V2
3) Version 3: https://github.com/AdityaVijay1/CMS-GroupPA1

Our Theme Design covers:
1) Colour Scheme that is based around the client's logo <br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/35591636-5c8f-4ba0-8334-2c4f241177ad)

2) Custom Media Images and Designs <br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/768f1ba6-441e-4d78-a233-dafb06c874a5)
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/07674f31-2088-4e60-a6f6-8852e1019227)

3) Custom Made theme using Bootstrap <br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/fb5f08fc-aeea-42b2-8a75-15ec7b8f7361)

4) Custom Domain and Security <br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/de47a730-9334-4bcb-8ab7-a1e9f78536a3)
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/2a2ce1c0-a0c2-4aa0-a84c-dd6801f3bbee)

5) Multiple Call to Action throughout the website <br>

6) Mobile Layout View  <br>
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/9323c1a1-d3c2-4db6-874e-e1d455438c5a)




## Website Details and Images

This is the final version design of our website where we have used WordPress, PHP Coding, CSS and HTML coding to develop the layout and content of the website. 
<br> <br> <br>

# Screenshots of Version 3 Website:

## Header.php

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/b7ae14a5-4847-4014-bc08-62da121b2cd8)

### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/937ad12b-2aee-427f-9355-78f7526892bb)

### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/d070877f-04ce-42ca-92fb-112415336b91)


<br><br><br>

## Footer.php

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/cf8a0bba-fe89-4fbe-a7ac-7f381cbca254)


### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/09ad04de-0b62-44e1-925c-0c955df2b06e)


### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/b9237754-400d-4b16-80b9-ca13b4c591f1)


<br><br><br>

## Front-Page.php

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/1a137141-6d4d-4a41-b129-18831e3b7813)


### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/31c7aca4-6d15-415b-b09a-d463a7c331fe)


### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/fb7757ee-421e-4ad6-ac55-56ee6956c64c)



<br><br><br>

## style.css

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/fa87f8f8-ea92-456e-b3da-3ca75eee1988)


### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/f972bc1e-0cee-4a51-b083-bd472059a4e0)


### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/54d1f499-e135-4d83-a303-b6f8fa2aa26d)


<br><br><br>

## Functions.php

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/d91e125e-977b-4174-b9b7-0ca210eac4df)


### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/7c32d0b2-2d42-42ab-ab98-debe86f1d70d)


### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/6d8a8c1e-3dda-46b8-a999-8351c23b5bae)


## Single.php

### Code:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/61f5fa5c-abe5-488c-b02c-ea6f7a641154)


### Browser View:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/e394de05-302a-4021-9e89-82f3743f0d0d)


### View Source:
![image](https://github.com/AdityaVijay1/CMS-GroupPA1/assets/84958533/03ac2cc9-cc4d-46ae-9924-a78b43974efb)


# References






