//1
/*Sukurti komponentą, kuris užrašytų “LABAS, ZUIKI!”. Raidžių spalva pink. Spalva tekstui nurodoma komponento viduje naudojant style.*/

function Zuikis ({tekstas}) {
    
    return (
        <h1 style={
            {
                color: 'pink'
            }
        }>LABAS ZUIKI! {}</h1>
    )
}



//2
/*Sukurti komponentą, kuris gauną vieną props. Props yra bet koks tekstas, kuris komponente atvaizduojamas h1 tage.*/

function Props({text}) {
    return (<h1>{text}</h1>)
}



//3
/*Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai.*/

function Gyvunai({num}) {
    let color = '';
    if(num == 1){
        color = 'blue';
    }
    if(num == 2){
        color = 'red';
    }
    return <h1 style={
        {
            color: color
        }
    }>“Zebrai ir Bebrai”</h1>
}

//4
/*Sukurti komponentą, kuris gauna du props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage.*/

function PropsDu({text1, text2}){
    return (
    <>
        <h1>{text1}</h1>
        <h2>{text2}</h2>
    </>
    )
}


//5
/*Sukurti komponentą, kuris gauna tris props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage, o trečias yra spalva, kuria nudažomi abu tekstai.*/

function PropsTrys ({textas1, textas2, spalva}){
    return (
        <div style={
            {
                color: spalva
            }
        }>
            <h1>{textas1}</h1>
            <h2>{textas2}</h2>
        </div>
    )
}
export {PropsTrys, PropsDu, Gyvunai, Props, Zuikis};



