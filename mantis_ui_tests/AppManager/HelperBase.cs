using System;
using OpenQA.Selenium;
using OpenQA.Selenium.Support.UI;

namespace mantis_ui_tests
{
    public class HelperBase
    {
        public ApplicationManager manager { get; set; }
        public IWebDriver driver { get; set; }
        public HelperBase(ApplicationManager manager)
        {
            this.manager = manager;
            this.driver = manager.driver;
        }

        public void Type(string locator, string text)
        {
            if (text != null)
            {
                driver.FindElement(By.CssSelector(locator)).Clear();
                driver.FindElement(By.CssSelector(locator)).SendKeys(text);
            }
        }
        public bool IsElementPresent(By locator)
        {
            driver.Manage().Timeouts().ImplicitWait = TimeSpan.FromSeconds(0);
            ICollection<IWebElement> collection = driver.FindElements(locator);
            driver.Manage().Timeouts().ImplicitWait = TimeSpan.FromSeconds(10);
            if (collection.Count == 0)
                return false;
            return collection.First().Displayed;
        }
    }
}

