using System;
using System.Text;

namespace mantis_ui_tests
{
    [TestFixture]
    public class TestBase
    {
        protected ApplicationManager app;

        [SetUp]
        public void SetupApplicationManager()
        {
            app = ApplicationManager.GetInstance();
            app.Auth.Login(new AccountData("administrator", "root"));
        }

        public static Random rnd = new Random();

        public static string GenerateRandomString(int max)
        {
            char[] chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%%'&*()^:".ToCharArray();
            string word = "";
            for (int i = 0; i < max; i++)
            {
                int letter_num = rnd.Next(0, chars.Length - 1);


                word += chars[letter_num];
            }
            return word.ToString();
        }
    }
}

