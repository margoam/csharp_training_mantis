using System;
namespace mantis_ui_tests
{
        [TestFixture]
        public class ProjectRemovalTests : TestBase
        {
        ProjectData newProject = new ProjectData
                (GenerateRandomString(10), GenerateRandomString(10));

        AccountData accountData = new AccountData { Username = "administrator", Password = "root" };

        [Test]
            public void ProjectRemovalTest()
            {
              
                app.Menu.GoToProjectsPage();
                app.Api.CreateProjectForRemovalIfNotExist(newProject, accountData);
                List<ProjectData> oldProjects = APIHelper.GetAllProjects(accountData);

                app.Menu.GoToEditProjectPage(0);
                app.Project.RemoveProjectIfExist(oldProjects[0],accountData);

                List<ProjectData> newProjects = APIHelper.GetAllProjects(accountData);

                oldProjects.RemoveAt(0);
                newProjects.Sort();
                oldProjects.Sort();
                Assert.AreEqual(oldProjects, newProjects);
            }
        }
}

