using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Media;

namespace DeGokkers
{
    public partial class InputPanel : Form
    {
        Spaceship spaceshipRed;
        Spaceship spaceshipGreen;
        Spaceship spaceshipBlue;
        Spaceship spaceshipYellow;

        public InputPanel()
        {
            InitializeComponent();
            spaceshipRed = new Spaceship(ufoRed, "red");
            spaceshipGreen = new Spaceship(ufoBlue, "blue");
            spaceshipBlue = new Spaceship(ufoGreen, "green");
            spaceshipYellow = new Spaceship(ufoYellow, "yellow");
            playSimpleSound();
        }

        // GETTERS & SETTERS
        public int GetMapWidth()
        {
            return worldMap.Width;
        }

        private void InputPanel_Load(object sender, EventArgs e)
        {

        }
        private void Play()
        {
            do
            {
                spaceshipRed.Run();
                spaceshipGreen.Run();
                spaceshipBlue.Run();
                spaceshipYellow.Run();
            } while (spaceshipBlue.MyPictureBox.Left <= spaceshipBlue.RaceTrackLength);
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            Play();
        }
        public void playSimpleSound()
        {
            SoundPlayer simpleSound = new SoundPlayer(DeGokkers.Properties.Resources.Spacerace);
            simpleSound.PlayLooping();
        }

        private void better1Bet_Click(object sender, EventArgs e)
        {
            
        } 
    }
}
