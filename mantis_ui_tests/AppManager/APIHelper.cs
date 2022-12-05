using System;
namespace mantis_ui_tests
{
	public class APIHelper : HelperBase
	{
		public APIHelper(ApplicationManager manager) : base(manager)
		{
		}

		public static List<ProjectData> GetAllProjects(AccountData account)
		{
			var client = new MantisConnectPortTypeClient();

			return client.mc_projects_get_user_accessible(account.Username, account.Password);


        }

        public void CreateProjectForRemovalIfNotExist(ProjectData projectData, AccountData accountData)
        {
            var client = new Mantis.MantisConnectPortTypeClient();
            var project = new Mantis.ProjectData();
            project.name = projectData.Name;
            project.desription = projectData.Description;
            if (GetAllProjects(accountData).Count < 1)
            {
                client.mc_project_add(accountData.Username, accountData.Password, projectData);
            }
        }
	}
}

