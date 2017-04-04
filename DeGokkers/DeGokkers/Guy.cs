using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DeGokkers
{
    public class Guy
    {
        private string playerName;       // De naam van de gokker
        private int playerNumber;        // Het ID van de Player
        private int cash;                // Het saldo van de gokker 
        private int amount;
        private int spaceshipNumber;

        private Bet myBet;               // Een instantie van Bet() 
        private Label myLabel;
        private RadioButton myRadioButton;

        
        public Guy(int playerNumber, int cash, string playerName, Label myLabel, RadioButton myRadioButton)
        {
            this.playerName = playerName;
            this.playerNumber = playerNumber;
            this.cash = cash;
            this.myLabel = myLabel;
            this.myRadioButton = myRadioButton;
        }

        public void UpdateLabels()
        {
            myLabel.Text = this.myBet.GetDescription();
        }

        public bool PlaceBet(int amount, int spaceshipNumber)
        {
            this.amount = amount;
            this.spaceshipNumber = spaceshipNumber;
            this.myBet = new Bet(this, this.amount, this.spaceshipNumber);
            return true;
        }

        public void ClearBet()
        {
            this.amount = 0;
        }
        public int PayOut(int Winner)
        {
            if (Winner == spaceshipNumber)
            {
                this.cash += (this.amount);
                return this.cash;
            }
            else
            {
                this.cash -= this.amount;
                return this.cash;
            }
        }
        public string GetName()
        {
            return this.playerName;
        }
        public int GetCash()
        {
            return this.cash;
        }
        public int GetPlayerNumber()
        {
            return this.playerNumber;
        }
        public Label GetLabel()
        {
            return this.myLabel;
        }
        public RadioButton GetRadioButton()
        {
            return this.myRadioButton;
        }
    }
}
