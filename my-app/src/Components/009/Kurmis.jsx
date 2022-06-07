function Kurmis(){
const zxz = 19;    
    return(
        <>
        <h2 style={
            {
                color: 'pink', 
                backgroundColor: 'skyblue',
                padding: zxz + 'px'
            }
        }>Kurmis</h2>
        <span>Urvinis padaras Nr. { 10 + 11 + zxz }</span>
        <span>Urvinis padaras Nr. { zxz > 20 ? 'jaja23' : 'no number'  }</span>
        </>
    );
}
export default Kurmis;