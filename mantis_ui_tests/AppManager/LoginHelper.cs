using System;
using OpenQA.Selenium;
using OpenQA.Selenium.Support.UI;

namespace mantis_ui_tests
{
    public class LoginHelper : HelperBase
    {
        public LoginHelper(ApplicationManager app) : base(app) { }

        public void Login(AccountData account)
        {
            if (IsLoggedIn())
            {
                if (IsLoggedIn(account))
                {
                    return;
                }
                Logout();
            }
            Type("#username", account.Username);
            driver.FindElement(By.CssSelector("[type='submit']")).Click();
            Thread.Sleep(250);
            Type("#password", account.Password);
            driver.FindElement(By.CssSelector("[type='submit']")).Click();
            Thread.Sleep(250);
        }

        public void Logout()
        {
            if (IsLoggedIn())
            {
                var element = driver.FindElement(By.CssSelector("li:nth-of-type(3) [data-toggle='dropdown']"));
                element.Click();
                Thread.Sleep(250);
                driver.FindElement(By.CssSelector("[href='/mantisbt-2.25.2/logout_page.php']")).Click();
                Thread.Sleep(250);
            }
        }
        public bool IsLoggedIn()
        {
            return !IsElementPresent(By.CssSelector(".login-logo"));
        }
        public bool IsLoggedIn(AccountData account)
        {
            return IsLoggedIn()
                   && GetLoggedUserName() == account.Username;
        }

        private string GetLoggedUserName()
        {
            return driver.FindElement(By.CssSelector(".user-info")).Text;
        }
    }
}

