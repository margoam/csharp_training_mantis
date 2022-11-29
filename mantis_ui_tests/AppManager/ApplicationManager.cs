using System;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;

namespace mantis_ui_tests
{
    public class ApplicationManager
    {
        public IWebDriver driver { get; set; }

        public string baseUrl { get; set; }
        public LoginHelper Auth { get; set; }
        public ManagementMenuHelper Menu { get; set; }
        public ProjectManagementHelper Project { get; set; }

        public static ThreadLocal<ApplicationManager> app = new ThreadLocal<ApplicationManager>();

        private ApplicationManager()
        {
            driver = new FirefoxDriver();
            baseUrl = "http://localhost/mantisbt-2.25.2/";
          
            Auth = new LoginHelper(this);
            Menu = new ManagementMenuHelper(this, baseUrl);
            Project = new ProjectManagementHelper(this);
        }
        public static ApplicationManager GetInstance()
        {
            if (!app.IsValueCreated)
            {
                ApplicationManager newInstance = new ApplicationManager();
                newInstance.Menu.OpenHomePage();
                app.Value = newInstance;
            }
            return app.Value;
        }

        public void Stop()
        {
            try
            {
                driver?.Quit();

            }
            catch (Exception)
            {
                //
            }
        }

    }
}

