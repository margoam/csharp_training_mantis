using System;
using System.Xml.Linq;
using mantis_ui_tests;
using OpenQA.Selenium;
using OpenQA.Selenium.Support.UI;

namespace mantis_ui_tests
{
    public class ProjectManagementHelper : HelperBase
    {
        public ProjectManagementHelper(ApplicationManager app) : base(app) { }

        public void CreateProject(ProjectData newProject)
        {
            FillForm(newProject);
            SumbitProjectCreation();
        }

        private void SumbitProjectCreation()
        {
            driver.FindElement(By.CssSelector("[type='submit']")).Click();
            Thread.Sleep(250);
            driver.FindElement(By.CssSelector($"[href='{ManagementMenuHelper.projectsPage}']")).Click();
            Thread.Sleep(250);
        }

        private void FillForm(ProjectData newProject)
        {
            Type("#project-name", newProject.Name);
            Type("#project-description", newProject.Description);
        }


        public List<ProjectData> GetProjectsList()
        {
            List<ProjectData> projectCollection = new List<ProjectData>();
            ICollection<IWebElement> projects = driver.FindElements(By.CssSelector("tbody")).First().FindElements(By.CssSelector("tr"));
            foreach (IWebElement project in projects)
            {
                var name = project.FindElement(By.XPath("td[1]")).Text;
                var description = project.FindElement(By.XPath("td[5]")).Text;
                projectCollection.Add(new ProjectData(name, description));
            }

            return projectCollection;
        }

        public List<ProjectData> isProjectExists(ProjectData newProject)
        {
            var listOfAllProjects = GetProjectsList();
            var projectExists = listOfAllProjects.Count >= 1;
            ;
            while (!projectExists)
            {
                manager.Menu.GoToCreateProjectPage();
                CreateProject(newProject);
                listOfAllProjects = GetProjectsList();
                projectExists = listOfAllProjects.Count >= 1;
            }

            return listOfAllProjects;
        }

        public void RemoveProject()
        {
            driver.FindElement(By.CssSelector("#project-delete-form [type='submit']")).Click();
            Thread.Sleep(250);
            driver.FindElement(By.CssSelector("[type='submit']")).Click();
            Thread.Sleep(250);
        }

        public void RemoveProjectIfExist(ProjectData project, AccountData accountData)
        {
            foreach (var projectData in APIHelper.GetAllProjects(accountData))
            {
                if (projectData.Name == project.Name)
                {
                    SelectProjectToRemove(projectData.Name);
                    RemoveProject();
                }
            }
        }

        private void SelectProjectToRemove(string projectName)
        {
            manager.Menu.GoToProjectsPage();
            driver.FindElement(By.LinkText(projectName)).Click();
        }
    }
}

