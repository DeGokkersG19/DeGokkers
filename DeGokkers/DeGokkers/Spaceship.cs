using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Drawing;

namespace DeGokkers
{
    public class Spaceship
    {
        public int RaceTrackLength = 880;
        public PictureBox MyPictureBox = null;
        public Random Randomizer;

        public Spaceship(PictureBox raceUfo, string color)
        {
            this.MyPictureBox = raceUfo;
        }
        public void Run()
        {
            this.Randomizer = new Random();
            int rnd = this.Randomizer.Next(1,4);
            MyPictureBox.Left += rnd;
        }
    }
}
