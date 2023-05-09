let products = {
    data: [
      {
        productName: "The Alchemist \n by Paulo Coelho",
        category: "philosophy",
        price: "8.99",
        rating:"4.18",
        image: "./covers/thealchemist.jpg",
        author: "Paulo Coelho",
        library: "Antoine, Maliks, Stephan",
        summary: "This philosophical novel tells the story of Santiago, an Andalusian shepherd boy who embarks on a journey to fulfill his dreams and find his true purpose in life. Along the way, he encounters various obstacles and meets a number of interesting characters who help him on his journey."
      },
      {
        productName: "It Starts With Us \n by Colleen Hoover",
        category: "romance",
        price: "13.99",
        rating:"3.95",
        image: "./covers/itstartswithus.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Stephan, Maliks, Orientale",
        summary: "This romance novel follows the story of Lily Bloom, a young woman who falls in love with Ryle Kincaid, a neurosurgeon with a troubled past. As their relationship develops, Lily discovers some dark secrets about Ryle's past that threaten to tear them apart."
      },
      {
        productName: "The Girl on the Train \n by Paula Hawkins",
        category: "mystery",
        price: "9.99",
        rating:"3.91",
        image: "./covers/thegirlonthetrain.jpg",
        author: "Paula Hawkins",
        library: "Maliks",
        summary: "This mystery novel centers around Rachel Watson, a divorced alcoholic who spends her daily commute fantasizing about the seemingly perfect couple who live in a house she passes by. When the woman goes missing, Rachel becomes embroiled in the investigation and must confront her own demons along the way."
      },
      {
        productName: "The Great Gatsby \n by F. Scott Fitzgerald",
        category: "fiction",
        price: "7.99",
        rating:"3.91",
        image: "./covers/thegreatgatsby.jpg",
        author: "F. Scott Fitzgerald",
        library: "Stephan, Orientale",
        summary: "A classic novel set in the roaring twenties, The Great Gatsby explores the decadence and excess of the time through the eyes of the narrator, Nick Carraway. The story revolves around the enigmatic millionaire Jay Gatsby and his pursuit of his lost love, Daisy Buchanan. The novel is a timeless portrayal of the American Dream and the lengths people will go to achieve it."
      },
      {
        productName: "Hamlet \n by William Shakespeare",
        category: "classics",
        price: "6.14",
        rating:"4.02",
        image: "./covers/hamlet.jpg",
        author: "William Shakespeare",
        library: "Antoine",
        summary: "One of the most famous plays in the English language, Hamlet is a tragedy that tells the story of Prince Hamlet of Denmark, who seeks revenge against his uncle for killing his father and usurping the throne. The play is renowned for its introspective soliloquies and themes of betrayal, revenge, and madness."
      },
      {
        productName: "Ugly Love \n by Colleen Hoover",
        category: "romance",
        price: "12.99",
        rating:"4.13",
        image: "./covers/uglylove.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Stephan, Maliks",
        summary: "A contemporary romance novel, Ugly Love tells the story of Tate Collins, a young nurse who falls for her aloof and mysterious pilot neighbor, Miles Archer. As their relationship develops, Tate discovers that Miles is haunted by a tragic past that he cannot let go of. The novel is a heartwarming tale of love, loss, and forgiveness."
      },
      {
        productName: "It Ends With Us \n by Colleen Hoover",
        category: "romance",
        price: "12.99",
        rating:"4.27",
        image: "./covers/itendswithus.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Maliks",
        summary: "Another contemporary romance novel by Colleen Hoover, It Ends With Us follows the story of Lily Bloom, a young woman who falls for the charming neurosurgeon Ryle Kincaid. However, their relationship is complicated by Ryle's past and the return of Lily's first love, Atlas Corrigan. The novel is a poignant exploration of love, family, and domestic abuse."
      },
      {
        productName: "Verity \n by Colleen Hoover",
        category: "mystery",
        price:"13.99",
        rating:"4.36",
        image: "./covers/verity.jpg",
        author: "Colleen Hoover",
        library: "Orientale, Maliks",
        summary: "A psychological thriller, Verity follows the story of struggling writer Lowen Ashleigh, who is hired to finish the bestselling series of the reclusive author Verity Crawford. As Lowen delves into Verity's notes and diaries, she uncovers a chilling secret that threatens to destroy everything she holds dear. The novel is a gripping and suspenseful page-turner."
      },
      {
        productName: "The Da Vinci Code \n by Dan Brown",
        category: "mystery",
        price: "10.99",
        rating:"3.82",
        image: "./covers/thedavincicode.jpg",
        author: "Dan Brown",
        library: "Antoine",
        summary: "A fast-paced thriller, The Da Vinci Code follows the story of symbologist Robert Langdon, who is called to investigate the murder of a curator at the Louvre Museum in Paris. Along with cryptologist Sophie Neveu, Langdon discovers a series of clues hidden in the works of Leonardo da Vinci that lead to a shocking discovery. The novel is a thrilling blend of history, art, and conspiracy theory."
      },
      {
        productName: "L'Étranger \n by Albert Camus",
        category: "novel",
        price: "15.52",
        rating:"4.01",
        image: "./covers/letranger.jpg",
        author: "Albert Camus",
        library: "Antoine, Orientale",
        summary: "A philosophical novel, L'Étranger tells the story of Meursault, a French Algerian who kills an Arab man and faces a trial for his crime. The novel explores themes of existentialism, absurdism, and the human condition in a world devoid of meaning."
      },
      {
        productName: "The Lord of the Rings \n by J.R.R Tolkien",
        category: "adventure",
        price: "19.99",
        rating:"4.49",
        image: "./covers/thelordoftherings.jpg",
        author: "J.R.R Tolkien",
        library: "Maliks",
        summary: "A classic high fantasy trilogy, The Lord of the Rings tells the epic story of hobbit Frodo Baggins, who is entrusted with the task of destroying the One Ring, a powerful artifact that grants its wielder unlimited power. Along with a fellowship of allies, including the wizard Gandalf and the warrior Aragorn, Frodo embarks on a perilous journey to Mordor, the dark lord Sauron's domain."
      },
      {
        productName: "Le Rouge et le Noir \n by Stendhal",
        category: "classics",
        price: "8.49",
        rating:"3.87",
        image: "./covers/lerougeetlenoir.jpeg",
        author: "Stendhal",
        library: "Antoine, Stephan",
        summary: "A classic novel of the 19th century, Le Rouge et le Noir tells the story of Julien Sorel, a young man from a poor family who rises through the ranks of society by becoming the secretary of a wealthy Marquis. The novel is a satire of the social and political climate of France after the fall of Napoleon, exploring themes of ambition, class, and"
      },
    ],
  };
  
  for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    //add event listener to navigate to page2.html
    image.addEventListener("click", () => {
    window.location.href = "./covers/uglylove.jpg";
    });
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h4");
    name.classList.add("product-name");
    name.innerText = i.productName;
    container.appendChild(name);
    //genre
    let genre = document.createElement("h6");
    genre.innerText = i.category;
    container.appendChild(genre);
    //price
    let price = document.createElement("h6");
    price.innerText = "$" + i.price;
    container.appendChild(price);
    //rating
    let rating = document.createElement("h6");
    rating.innerText = "⭐" + i.rating;
    container.appendChild(rating);
    //library
    let library = document.createElement("h6");
    library.innerText = "Available at: " + i.library;
    container.appendChild(library);

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "all") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  
  //Search button click
  document.getElementById("search-input").addEventListener("keyup", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
  
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.toLowerCase().includes(searchInput.toLowerCase())) {
        //display matching card
        cards[index].classList.remove("hide");
      } else {
        //hide others
        cards[index].classList.add("hide");
      }
    });
  });  
  
  
  //Initially display all products
  window.onload = () => {
    filterProduct("all");
  };