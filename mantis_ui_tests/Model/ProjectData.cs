using System;
namespace mantis_ui_tests
{
    public class ProjectData : IEquatable<ProjectData>, IComparable<ProjectData>
    {
        public ProjectData(string name, string description)
        {
            this.Name = name;
            this.Description = description;

        }
        public string Name { get; set; }
        public string Description { get; set; }

        public int CompareTo(ProjectData other)
        {
            if (ReferenceEquals(other, null))
                return 1;
            return String.Compare((Name + Description),
            other.Name + other.Description, StringComparison.Ordinal);
        }

        public bool Equals(ProjectData other)
        {
            if (ReferenceEquals(other, null))
            {
                return false;
            }
            if (ReferenceEquals(this, other))
            {
                return true;
            }
            return Name == other.Name && Description == other.Description;


        }

        public override string ToString()
        {
            return Name + " " + Description;

        }
    }
}

