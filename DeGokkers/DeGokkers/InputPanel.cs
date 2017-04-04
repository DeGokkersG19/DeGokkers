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
using System.Threading;

namespace DeGokkers
{
    public partial class InputPanel : Form
    {
        Spaceship spaceshipRed;
        Spaceship spaceshipGreen;
        Spaceship spaceshipBlue;
        Spaceship spaceshipYellow;

        private SoundPlayer Player = new SoundPlayer();
        string SoundTrackPath = System.IO.Path.GetFullPath(@"..\..\Resources\Spacerace.wav");

        Guy sietse;
        Guy fer;
        Guy lidy;

        private bool isFinished;
        private bool start = false;
        private int winner;

        public InputPanel()
        {
            InitializeComponent();
        }
        private void InputPanel_Load(object sender, EventArgs e)
        {
            ufoRed.Parent = worldMap;
            ufoGreen.Parent = worldMap;
            ufoBlue.Parent = worldMap;
            ufoYellow.Parent = worldMap;

            spaceshipRed = new Spaceship(ufoRed, "red");
            spaceshipGreen = new Spaceship(ufoGreen, "green");
            spaceshipBlue = new Spaceship(ufoBlue, "blue");
            spaceshipYellow = new Spaceship(ufoYellow, "yellow");

            sietse = new Guy(1, 50, "Sietse", better1Label, better1);
            fer = new Guy(2, 45, "Fer", better2Label, better2);
            lidy = new Guy(3, 75, "Lidy", better3Label, better3);

            creditSietse.Text = "" + sietse.GetCash();
            creditFer.Text = "" + fer.GetCash();
            creditLidy.Text = "" + lidy.GetCash();

            PlaySound();
        }
        private void btnPlay_Click(object sender, EventArgs e)
        {
            start = true;
            DecideBoost();

            creditSietse.Text = "" + sietse.GetCash();
            creditFer.Text = "" + fer.GetCash();
            creditLidy.Text = "" + lidy.GetCash();

            timer1.Start();
        }
        private void timer1_Tick(object sender, EventArgs e)
        {
            Play();

            if (spaceshipBlue.Finished() == true)
            {
                timer1.Stop();
                this.isFinished = true;
                winner = 2;
                blueWin.Visible = true;
                MessageBox.Show("Spaceship Blue Won!");
            }
            if (spaceshipGreen.Finished() == true)
            {
                timer1.Stop();
                this.isFinished = true;
                winner = 3;
                greenWin.Visible = true;
                MessageBox.Show("Spaceship Green Won!");
            }
            if (spaceshipRed.Finished() == true)
            {
                timer1.Stop();
                this.isFinished = true;
                winner = 1;
                redWin.Visible = true;
                MessageBox.Show("Spaceship Red Won!");
            }
            if (spaceshipYellow.Finished() == true)
            {
                timer1.Stop();
                this.isFinished = true;
                winner = 4;
                yellowWin.Visible = true;
                MessageBox.Show("Spaceship Yellow Won!");
            }
            if (isFinished == true)
            {
                blueWin.Visible = false;
                greenWin.Visible = false;
                redWin.Visible = false;
                yellowWin.Visible = false;

                spaceshipRed.TakeStartPosition();
                spaceshipGreen.TakeStartPosition();
                spaceshipBlue.TakeStartPosition();
                spaceshipYellow.TakeStartPosition();

                isFinished = false;

                sietse.PayOut(this.winner);
                fer.PayOut(this.winner);
                lidy.PayOut(this.winner);

                creditSietse.Text = "" + sietse.GetCash();
                creditFer.Text = "" + fer.GetCash();
                creditLidy.Text = "" + lidy.GetCash();


                btnPlay.Enabled = true;
                better1Bet.Enabled = true;
                better2Bet.Enabled = true;
                better3Bet.Enabled = true;

                sietse.ClearBet();
                fer.ClearBet();
                lidy.ClearBet();

                winner = 0;
            }
        }
        private void Play()
        {
            if (start == true)
            {
                btnPlay.Enabled = false;
                better1Bet.Enabled = false;
                better2Bet.Enabled = false;
                better3Bet.Enabled = false;
                spaceshipRed.Run(true);
                spaceshipGreen.Run(true);
                spaceshipBlue.Run(true);
                spaceshipYellow.Run(true);
            }
        }
        private void PlaySound()
        {

            this.Player.PlayLooping();
            try
            {
                this.Player.SoundLocation = SoundTrackPath;
                //MessageBox.Show(SoundTrackPath);
                this.Player.PlayLooping();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message, "Error playing sound");
            }
        }
        public void DecideBoost()
        {
            Random rnd = new Random();
            int random = rnd.Next(1,5);
            if (random == 1)
            {
                spaceshipRed.Boost();
            }
            if (random == 2)
            {
                spaceshipGreen.Boost();
            }
            if (random == 3)
            {
                spaceshipBlue.Boost();
            }
            if (random == 4)
            {
                spaceshipYellow.Boost();
            }
        }
        public int GetMapWidth()
        {
            return worldMap.Width;
        }

        private void better1Bet_Click(object sender, EventArgs e)
        {
            if (sietse.GetCash() < better1Amount.Value)
            {
                better1Bet.Enabled = false;
            }
            else if (better1.Checked)
            {
                int value = (int) better1Amount.Value;
                int spaceshipNumber = (int) spaceshipSelector1.Value;
                sietse.PlaceBet(value, spaceshipNumber);
                sietse.UpdateLabels();
                creditSietse.Text = "" + sietse.GetCash();
            }
        }

        private void better2Bet_Click(object sender, EventArgs e)
        {
            if (fer.GetCash() < better2Amount.Value)
            {
                better2Bet.Enabled = false;
            }
            else if (better2.Checked)
            {
                int value = (int)better2Amount.Value;
                int spaceshipNumber = (int)spaceshipSelector2.Value;
                fer.PlaceBet(value, spaceshipNumber);
                fer.UpdateLabels();
                creditFer.Text = "" + fer.GetCash();
            }
        }

        private void better3Bet_Click(object sender, EventArgs e)
        {
            if (lidy.GetCash() < better3Amount.Value)
            {
                better3Bet.Enabled = false;
            }
            else if (better3.Checked)
            {
                int value = (int)better3Amount.Value;
                int spaceshipNumber = (int)spaceshipSelector3.Value;
                lidy.PlaceBet(value, spaceshipNumber);
                lidy.UpdateLabels();
                creditLidy.Text = "" + lidy.GetCash();
            }
        }
    }
}
