using System;
using OpenQA.Selenium;

namespace mantis_ui_tests
{
    public class ManagementMenuHelper : HelperBase
    {
        public const string loginPage = "login_page.php";
        public const string projectsPage = "manage_proj_page.php";
        public const string createProjectsPage = "manage_proj_create_page.php";

        public string BaseURL { get; set; }
        public ManagementMenuHelper(ApplicationManager app, string BaseUrl) : base(app)
        {
            this.BaseURL = BaseUrl;
        }

        public void OpenHomePage()
        {
            driver.Navigate().GoToUrl(this.BaseURL + loginPage);
            Thread.Sleep(250);
        }

        public void GoToProjectsPage()
        {
            if (!IsThisPageOpened(BaseURL + projectsPage, By.CssSelector(".active [href='/mantisbt-2.12.0/manage_proj_page.php']")))
                driver.Navigate().GoToUrl(this.BaseURL + projectsPage);
            Thread.Sleep(250);
        }

        public void GoToCreateProjectPage()
        {
            if (!IsThisPageOpened(BaseURL + createProjectsPage, By.CssSelector("#manage-project-create-form")))
                driver.FindElement(By.CssSelector("[action='manage_proj_create_page.php']")).Click();
            Thread.Sleep(250);
        }

        private bool IsThisPageOpened(string url, By locator)
        {
            if ((driver.Url == url) && (IsElementPresent(locator)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public void GoToEditProjectPage(int index)
        {
            driver.FindElements(By.CssSelector("tbody"))
                .First().FindElements(By.CssSelector("tr"))[index]
                .FindElement(By.CssSelector("a[href]")).Click();
            Thread.Sleep(250);
        }
    }
}

