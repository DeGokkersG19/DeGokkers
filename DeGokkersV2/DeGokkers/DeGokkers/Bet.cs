using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DeGokkers
{
    class Bet
    {
        public int amount; //Het bedrag van de weddenschap.
        public int spaceshipNumber; //Het nummer van de hond waarop weddenschap is afgesloten.
        public Guy bettor; //De gokker die gewed heeft.

        public Bet(Guy bettor, int amount, int spaceshipNumber)
        {
            this.bettor = bettor;
            this.amount = amount;
            this.spaceshipNumber = spaceshipNumber;
        }
        public string GetDescription()
        {
            
            if (amount > 0)
            {
                string bet = bettor.GetName() + " bets " + amount + " dollar on\n Spaceship #" + spaceshipNumber;
                return bet;
            }
            else
            {
                string noBet = bettor.GetName() + " did not place a bet";
                return noBet;
            }
        }
        public int GetAmount()
        {
            return this.amount;
        }
        //Retourneer een string die aangeeft wie de weddenschap heeft gedaan,
        //voor welk bedrag er is gewed en op welke hond er is gewed.
        //Bijv. “Sietse wedt 8 euro op hond 4”.
        //Als het bedrag 0 is, is er geen weddenschap geplaatst.
        //De string die dan geretourneerd wordt is bijv.
        //“Sietse heeft geen weddenschap geplaatst.”)
    }

            //De parameter van deze methode is de winnaar van de race.
            //Als de hond gewonnen heeft, retourneer dan het bedrag dat gewed is
            //Anders, retourneer het tegengestelde van het gewedde bedrag.
            
    }

