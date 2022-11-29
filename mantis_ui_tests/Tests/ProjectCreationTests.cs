using System;
namespace mantis_ui_tests
{
    [TestFixture]
    public class ProjectCreationTests : TestBase
    {
        [Test]

        public void ProjectCreationTest()
        {
            var newProject = new ProjectData
                (GenerateRandomString(10), GenerateRandomString(10));

            app.Menu.GoToProjectsPage();
            List<ProjectData> oldProjects = app.Project.GetProjectsList();

            app.Menu.GoToCreateProjectPage();
            app.Project.CreateProject(newProject);

            List<ProjectData> newProjects = app.Project.GetProjectsList();

            oldProjects.Add(newProject);
            newProjects.Sort();
            oldProjects.Sort();
            Assert.AreEqual(oldProjects, newProjects);

        }
    }
}

