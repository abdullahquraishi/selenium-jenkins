const {Builder, By, Key, until} = require('selenium-webdriver');
require('chromedriver');

(async function example() {
  let driver = await new Builder().forBrowser('chrome').build();
  try {
    await driver.get('http://localhost/signup/login.php');
    //Enter username
    await driver.findElement(By.name("username")).sendKeys("AB");
    await driver.findElement(By.name("password")).sendKeys("ab1234");
    //submit form
    await driver.findElement(By.name("login_userrrr")).click();
    //await driver.wait(until.titleIs('Home2'));
    
  }
  catch(e){
    return console.error(e);
    
  }
  finally {
    await driver.quit();
  }
})();