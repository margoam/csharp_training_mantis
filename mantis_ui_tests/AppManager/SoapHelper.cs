using System;
namespace mantis_ui_tests
{
	public class SoapHelper : HelperBase
	{
		public SoapHelper(ApplicationManager manager) : base(manager)
		{
		}

		public List<ProjectData> GetAllProjects(AccountData account)
		{
			Mantis.MantisConnectPortTypeClient client = new MantisConnectPortTypeClient();

			client.mc_projects_get_user_accessible(account.Username, account.Password, project);


        }

        public void AddProject(ProjectData project)
        {

        }

        public void DeleteProject(ProjectData project)
		{

		}
	}
}

