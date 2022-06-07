
import './App.css';
import Hello from './Components/009/Hello';
import Kurmis from './Components/009/Kurmis';
import {Zuikis, Props, Gyvunai, PropsDu, PropsTrys} from './Components/009/nd009';


function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Hello spalva="crimson" size="14" skaicius="4"></Hello>
        <Kurmis></Kurmis>
        <Hello spalva="skyblue" size="33" skaicius="4"></Hello>
        <Hello spalva="yellow"size="22" skaicius={4}></Hello>
        <Zuikis color="pink"></Zuikis>
        <Props text = "nebeprisikiskiakopusteliaudavome"></Props>
        <Gyvunai></Gyvunai>
        <PropsDu text1="Man patinka" text2="programuoti"></PropsDu>
        <PropsTrys textas1="Labas" textas2="as krabas" spalva="red"></PropsTrys>
      </header>
    </div>
  );
}

export default App;
