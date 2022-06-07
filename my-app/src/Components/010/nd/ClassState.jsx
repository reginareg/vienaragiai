import {useState} from 'react';



function ClassState() {
    const [radius, setRadius] = useState("50%");
    const [num, setNum] = useState(1);
    const [nr, setNr] = useState(1)

 

    const random= () =>{
      
    const rand=   Math.floor((Math.random( )* 25) + 5) 
      
    setNum(rand)
    
    };

    const plus = () => {
    setNr(n => n +1);
  }
    const minus = () => {
    setNr(n => n -3);
  }
   

    const set = () => {setRadius( radius === '0%' ? '50%' : '0%')};
    
    
    return (
    <div className="App">
      <header className="App-header">
        
      <div className="Aplication" style={{borderRadius: radius}}>{num}</div>
      <span>{nr}</span>
     

      <button onClick={set}>change</button>
      <button onClick={random}>random</button>
      <button onClick={plus}>+1</button>
      <button onClick={minus}>-3</button>
      </header>
    </div>
  );
}

export default ClassState;

//1.Sukurti aplikaciją, kuri turi mygtuką change ir atvaizduoja apskritimą. Paspaudus mygtuką change apskritimas turi pavirsti į kvadratą, o paspaudus dar kartą vėl pavirsti apskritimu.

//2.Sukurti aplikaciją, kuri turi mygtukus change ir random bei atvaizduoja apskritimą su random skaičiumi viduje. Paspaudus change mygtuką apskritimas keičiasi į stačiakampį kaip pirmame uždavinyje, o paspaudus random mygtuką, skaičius pasikeičia į rand 5 - 25

//3.Sukurti aplikaciją, kuri turi mygtukus plus ir minus, bei atvaizduoja skaičių 0. Paspaudus plus mygtuką, skaičius padidėja 1, o paspaudus minus- sumažėja 3


