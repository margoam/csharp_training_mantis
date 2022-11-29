using System;
namespace mantis_ui_tests
{
    public class AccountData
    {
        public string Username { get; set; }
        public string Password { get; set; }
        public string Email { get; set; }

        public AccountData(string username, string password)
        {
            this.Username = username;
            this.Password = password;
        }

        public AccountData(string username, string password, string email)
        {
            this.Username = username;
            this.Password = password;
            this.Email = email;
        }
    }
}

