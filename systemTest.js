const {Builder, By, Key, until} = require('selenium-webdriver');
require('chromedriver');

(async function example() {
  let driver = await new Builder().forBrowser('chrome').build();
  try {
    await driver.get('http://localhost/signup/register.php');
    //Enter username
    await driver.findElement(By.name("username")).sendKeys("AB");

    await driver.findElement(By.name("email")).sendKeys("ab@email.com");
    await driver.findElement(By.name("password_1")).sendKeys("admin123");
    await driver.findElement(By.name("password_2")).sendKeys("admin123");
    //submit form
    await driver.findElement(By.name("reg_user")).click();
    await driver.findElement(By.id("logout")).click();

    //login
    await driver.findElement(By.name("username")).sendKeys("admin");
    await driver.findElement(By.name("password")).sendKeys("admin1234");
    //submit form
    await driver.findElement(By.name("login_user")).click();
  
  } finally {
    //await driver.quit();
  }
})();