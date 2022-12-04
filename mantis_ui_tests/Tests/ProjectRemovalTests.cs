using System;
namespace mantis_ui_tests
{
        [TestFixture]
        public class ProjectRemovalTests : TestBase
        {
        ProjectData newProject = new ProjectData
                (GenerateRandomString(10), GenerateRandomString(10));

            [Test]
            public void ProjectRemovalTest()
            {

                app.Soap.GetAllProjects();
              
                app.Menu.GoToProjectsPage();
                List<ProjectData> oldProjects = app.Project.isProjectExists(newProject);

                app.Menu.GoToEditProjectPage(0);
                app.Project.RemoveProject();

                List<ProjectData> newProjects = app.Project.GetProjectsList();

                oldProjects.RemoveAt(0);
                newProjects.Sort();
                oldProjects.Sort();
                Assert.AreEqual(oldProjects, newProjects);
            }
        }
}

