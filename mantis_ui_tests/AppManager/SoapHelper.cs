using System;
namespace mantis_ui_tests
{
	public class SoapHelper : HelperBase
	{
		public SoapHelper(ApplicationManager manager) : base(manager)
		{
		}

		public List<ProjectData> GetAllProjects()
		{
			return this;
		}

        public void AddProject(ProjectData project)
        {

        }

        public void DeleteProject(ProjectData project)
		{

		}
	}
}

