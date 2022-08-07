import React ,{useState} from 'react'
import './TinderCards.css'
import TinderCard from 'react-tinder-card'
function TinderCards() {
    const [people , setPeople] = useState([
        {
        name: 'Elon Musk',
        url : 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/678px-Elon_Musk_Royal_Society_%28crop2%29.jpg'
        },
        {
        name: 'Jeff Bazos',
        url : 'https://m.media-amazon.com/images/M/MV5BYTNlOGZhYzgtMmE3OC00Y2NiLWFhNWQtNzg5MjRhNTJhZGVmXkEyXkFqcGdeQXVyNzg5MzIyOA@@._V1_.jpg'
        },
])
    const swiped = (direction , nameTodelete) =>{
        console.log("removing" + nameTodelete);
        //setLastDirection(direction);
    }
    const outOfFrame = (name) =>{
        console.log(name + "Left the Screen");
    }
    return (
    <div className='tinder_cards'>
        <div className='card_container'>
        {people.map((person)=>(
            <TinderCard 
                className='swipe'
                key = {person.name}
                preventSwipe={['up','down','left','right']}
                onSwipe ={(dir)=> swiped(dir,person.name)}
                onCardLeftScreen={() =>outOfFrame(person.name)}
            >
                <div style={{backgroundImage :`url(${person.url})`}}className="card"> 
                <div className='text_contain'>
                {person.name}
                </div></div>
            </TinderCard>
        ))} 
        </div>
    </div>
  )
}

export default TinderCards