using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Drawing;
using System.Threading;

namespace DeGokkers
{
    public class Spaceship
    {
        private int raceTrackLength = 805;
        private int speed;
        private string color;

        public PictureBox myPictureBox = null;

        public Spaceship(PictureBox raceUfo, string color)
        {
            this.myPictureBox = raceUfo;
            this.color = color;
        }
        public void Run(bool running)
        {
            if (running == true)
            {
                Random randomizer = new Random();
                this.speed = randomizer.Next(1, 12);
                this.myPictureBox.Left += this.speed;
                Thread.Sleep(10);
            }
            else
            {
                
            }
        }
        public void Boost()
        {
            this.myPictureBox.Left += 30;
        }
        public bool Finished()
        {
            if (this.myPictureBox.Left >= raceTrackLength)
            {
                return true;
            }
            else return false;
        }
        public void TakeStartPosition()
        {
            myPictureBox.Left = 0;
        }
        public string GetColor()
        {
            return this.color;
        }
    }
}
