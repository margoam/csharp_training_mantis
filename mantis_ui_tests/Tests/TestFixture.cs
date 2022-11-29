using System;
namespace mantis_ui_tests
{
    [SetUpFixture]
    public class TestSuitFixture
    {

        [OneTimeSetUp]

        public void SetupAppManager()
        {

            ApplicationManager app = ApplicationManager.GetInstance();


        }

        [OneTimeTearDown]
        public void StopAppManager()
        {
            ApplicationManager.GetInstance().Stop();


        }
    }
}

