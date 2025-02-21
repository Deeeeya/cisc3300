const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

// Question 6

const finalStatus = `Cats adopted: ${cats.filter(c => c.adoptionStatus === 'available').map(c => c.name).join(', ')}.`;
console.log(adoptionSentence);

// Question 7

const message = (Math.random() * 10) > 5 ? "greater than five!" : "less than five!";
console.log(message);

// Question 8

const cat = { name: "Pinecone", age: 13, type: "Munchkin", cuteness: 9001};
for(let key in cat) {
    console.log(cat[key]);
}

// Question 9 

if(1 == "1") {
    console.log("1 == '1' is true");
}
if(1 === "1") {
    console.log("1 == '1' is true");
} else {
    console.log("1 === '1' is false");
}

// Question 10

const cuteCats = cats.map(cat => `${cat.name} is cute!`);
console.log(cuteCats);