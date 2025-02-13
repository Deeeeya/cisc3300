// First Function

function findWord(word) {
    if(!!word.includes("pinecone")) {
        return true;
    }
    
}

let word = "pinecone";
console.log(findWord(word))

// Second Function


let sentenceArray = ['What is this?', 'This pinecone looks weird.', 'Blue is my favorite color.']
const result = sentenceArray.filter(sentenceArray => sentenceArray.includes("pinecone"));
console.log(result)

