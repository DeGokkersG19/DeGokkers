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
        public int PlayerID;  // De naam van de gokker
        //public Bet MyBet;    // Een instantie van Bet()         
        public int Cash;     // Het saldo van de gokker 

        public RadioButton MyButton;
        public Label MyLabel;

        public Guy(int PlayerID)
        {
            this.PlayerID = PlayerID;
            this.Cash = 100;
        }

        public void UpdateLabels()
        {

        }

        public bool PlaceBet()
        {
            return true;
        }

        public void ClearBet()
        {

        }

        public void Collect(int winner)
        {

        }
    }
}
