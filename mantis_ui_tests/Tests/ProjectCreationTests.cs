using System;
namespace mantis_ui_tests
{
    [TestFixture]
    public class ProjectCreationTests : TestBase
    {


        AccountData accountData = new AccountData { Username = "administrator", Password = "root" };

        [Test]

        public void ProjectCreationTest()
        {
            var newProject = new ProjectData
                (GenerateRandomString(10), GenerateRandomString(10));

            app.Menu.GoToProjectsPage();
            List<ProjectData> oldProjects = APIHelper.GetAllProjects(accountData);

            app.Menu.GoToCreateProjectPage();
            app.Project.CreateProject(newProject);

            List<ProjectData> newProjects = APIHelper.GetAllProjects(accountData);

            oldProjects.Add(newProject);
            newProjects.Sort();
            oldProjects.Sort();
            Assert.AreEqual(oldProjects, newProjects);

        }
    }
}

