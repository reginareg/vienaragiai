/*1.	Atvaizduoti masyvą dogs. Kiekvienas šuo atskirame kvadrate.

2.	Atvaizduoti masyvą dogs. Kiekvienas šuo atskirame apskritime. Šunys turi būti išrūšiuoti nuo ilgiausio žodžio iki trumpiausio, o apskritimai sunumeruoti nuo 1 iki galo.

3.	Atvaizduoti masyvą dogs. Poriniuose indeksuose esančius šunis atvaizduoti kvadratuose, neporinius apskritime.

4.	Atvaizduoti masyvą dogs. Šunis, kurie prasideda didžiąja raide praleisti (neatvaizduoti).

5.	Naudojant masyvą dogs atvaizduoti skaičius, kurie yra lygūs žodžių masyve ilgiui. Skaičius, didesnius nei 6 atvaizduoti žaliai, kitus raudonai.*/
import './App.css';

function App() {
    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
    let dogs2 = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
    dogs2.sort((a, b) => b.length - a.length);
    const dogs3 = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
    let dogs4= [];
    dogs.forEach(element => {
      if(element[0].toUpperCase() === element[0]){
        dogs4.push(element);
      }
    });
    let dogs5 = [];
    dogs.forEach(element => {
      dogs5.push(element.length);
    });

  
  return (
    <div className="App">
      <header className="App-header">
    <h1>sunys</h1>
        <div className='dogs-con'>
            {
                dogs.map((c, i) =><div key={i} className='squer dogs'>{c}</div>)
            }
        </div>
        <div className='dogs-con'>
            {
                dogs2.map((c, i) =><div key={i} className='round dogs'>{i+1} {c}</div>)
            }
        </div>
        <div className='dogs-con'>
            {
                dogs3.map((c, i) =><div key={i} className={i%2===0?'squer dogs':'round dogs'}>{c}</div>)
            }
        </div>
        <div className='dogs-con'>
            {
                dogs4.map((c, i) =><div key={i} className='squer dogs'>{c}</div>)
            }
        </div>
        <div className='dogs-con'>
            {
                dogs5.map((c, i) =><div key={i} className='squer dogs' style={{background: c > 6 ? 'green' : 'red'}}>{c}</div>)
            }
        </div>
      </header>
      
    </div>
  );
}

export default App;
