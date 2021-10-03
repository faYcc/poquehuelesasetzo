
# Heroku xD

==

- **Anti-Spam System**
    - Users have to wait a certain amount of time before performing the next task
    - You can customize the time in ```ENVIRONMENT_VARIABLES`` on Heroku


  
## ⚙️ Deployment

### Hosting on Heroku
    
 [![Deploy To Heroku](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?template=https%3A%2F%2Fgithub.com%2Fiam-NVN%2FSDMN_CheckerBot%2Fblob%2Fheroku-version)
 - Star and Fork this Repo
 - Click on the Above Shown ```Deploy To Heroku``` Button
 - Get Free Database from [Here](https://freesqldatabase.com)
 - Login to [WebPHPmyAdmin](http://www.phpmyadmin.co) with DB Credentials
 - Import checkerbot.sql file into your Database through PHPmyAdmin
 - Enter the Vars asked whilst Deploying the App
 - Set Webhook to main.php in your Heroku app
   - https://api.telegram.org/bot[BOTTOKEN]/setWebhook?url=https://[HEROKUAPPNAME].herokuapp.com/main.php   <br />
    Open the URL Replacing ```[BOTTOKEN]``` With your BotToken and ```[HEROKUAPPNAME]``` with your Heroku App Name
 <br />

  
  
