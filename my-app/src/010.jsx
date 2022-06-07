
import {useState} from 'react';
import './App.css';
import randColor from '../../Functions/randColor';

// const cats =['Pilkis', 'Rainis', 'Murkis'];

function App() {

     const [spalva, setSpalva] = useState('crimson');
     const [nr, setNr] = useState(1);
     const [kv, setKv] = useState([]);
     
     const stebuklas = (a) => {
         console.log('stebuklu stebuklas' + a);
     }
         const stebuklas1 = () => {
             console.log('stebuklu stebuklas');
            //  const newColor = spalva ==='crimson' ? 'skyblue' : 'crimson';
             setSpalva(oldColor => oldColor === 'crimson' ? 'skyblue' : 'crimson');
        //  setSpalva('skyblue');
        console.log(spalva);
    }

    const add = () => {
        setNr(n => n +1);
    }
    //  const kitasStebuklas = () => {
    //     console.log('Kitas stebuklu stebuklas');
    // }

    const addKv = () => setKv(kvM => [...kvM, randColor()]);

    const remKv = () => setKv(kvM => kvM.slice(1));

  return (
    <div className="App">
      <header className="App-header">
      <h1 style={{color:spalva}}>State</h1>
      <div className="kvc">
        {
           kv.map((c, i) => <div key={i}className = "kv" style={{background: randColor()}}>{i}</div>)  //kv yra masyvas; map sako imam tiek kiek masyve elementu; i c kintamaji atiduodam reiksme 1, nes 1 irasem; i yra indeksas 0-1-2-3-4-5...; nupaisome div atiduodame duokle react kaip key{i}, klase, kuri atvaizduoja kvadratuka
        }
       </div>

         <button onClick={() => stebuklas('Abra-kadabra')}>Press WITH!</button>
         <button onClick={stebuklas1}>Press WITHOUT!</button>
         <button OnClick={add}>+1</button>
         <button onClick={addKv}>ADD[]</button>
         <button onClick={remKv}>REMOVE[]</button>
      </header>
    </div>
  );
}

export default App;