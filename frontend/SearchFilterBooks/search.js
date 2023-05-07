let products = {
    data: [
      {
        productName: "Hamlet \n by William Shakespeare",
        category: "classics",
        price: "6.14",
        rating:"4.02",
        image: "./covers/hamlet.jpg",
        author: "William Shakespeare",
        library: "Antoine"
      },
      {
        productName: "Ugly Love \n by Colleen Hoover",
        category: "romance",
        price: "12.99",
        rating:"4.13",
        image: "./covers/uglylove.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Stephan, Maliks"
      },
      {
        productName: "Verity \n by Colleen Hoover",
        category: "mystery",
        price:"13.99",
        rating:"4.36",
        image: "./covers/verity.jpg",
        author: "Colleen Hoover",
        library: "Orientale, Maliks"
      },
      {
        productName: "It Ends With Us \n by Colleen Hoover",
        category: "romance",
        price: "12.99",
        rating:"4.27",
        image: "./covers/itendswithus.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Maliks"
      },
      {
        productName: "It Starts With Us \n by Colleen Hoover",
        category: "romance",
        price: "13.99",
        rating:"3.95",
        image: "./covers/itstartswithus.jpg",
        author: "Colleen Hoover",
        library: "Antoine, Stephan, Maliks, Orientale"
      },
      {
        productName: "The Da Vinci Code \n by Dan Brown",
        category: "mystery",
        price: "10.99",
        rating:"3.82",
        image: "./covers/thedavincicode.jpg",
        author: "Dan Brown",
        library: "Antoine"
      },
      {
        productName: "L'Étranger \n by Albert Camus",
        category: "novel",
        price: "15.52",
        rating:"4.01",
        image: "./covers/letranger.jpg",
        author: "Albert Camus",
        library: "Antoine, Orientale"
      },
      {
        productName: "The Alchemist \n by Paulo Coelho",
        category: "philosophy",
        price: "8.99",
        rating:"4.18",
        image: "./covers/thealchemist.jpg",
        author: "Paulo Coelho",
        library: "Antoine, Maliks, Stephan"
      },
      {
        productName: "The Girl on the Train \n by Paula Hawkins",
        category: "mystery",
        price: "9.99",
        rating:"3.91",
        image: "./covers/thegirlonthetrain.jpg",
        author: "Paula Hawkins",
        library: "Maliks"
      },
      {
        productName: "The Great Gatsby \n by F. Scott Fitzgerald",
        category: "fiction",
        price: "7.99",
        rating:"3.91",
        image: "./covers/thegreatgatsby.jpg",
        author: "F. Scott Fitzgerald",
        library: "Stephan, Orientale"
      },
      {
        productName: "Le Rouge et le Noir \n by Stendhal",
        category: "classics",
        price: "8.49",
        rating:"3.87",
        image: "./covers/lerougeetlenoir.jpeg",
        author: "Stendhal",
        library: "Antoine, Stephan"
      },
      {
        productName: "The Lord of the Rings \n by J.R.R Tolkien",
        category: "adventure",
        price: "19.99",
        rating:"4.49",
        image: "./covers/thelordoftherings.jpg",
        author: "J.R.R Tolkien",
        library: "Maliks"
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