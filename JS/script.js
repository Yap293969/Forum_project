class Poll {
    constructor(question, options) {
      this.question = question;
      this.options = options;
    }
  
    display() {
      const pollElement = document.createElement('div');
      pollElement.classList.add('poll');
  
      const questionElement = document.createElement('h3');
      questionElement.textContent = this.question;
      pollElement.appendChild(questionElement);
  
      this.options.forEach((option, index) => {
        const optionElement = document.createElement('input');
        optionElement.setAttribute('type', 'radio');
        optionElement.setAttribute('name', `poll-${this.question}`);
        optionElement.setAttribute('value', option);
        optionElement.id = `option-${this.question}-${index}`;
  
        const labelElement = document.createElement('label');
        labelElement.setAttribute('for', `option-${this.question}-${index}`);
        labelElement.textContent = option;
  
        pollElement.appendChild(optionElement);
        pollElement.appendChild(labelElement);
        pollElement.appendChild(document.createElement('br'));
      });
  
      document.getElementById('pollsContainer').appendChild(pollElement);
    }
  }
  
  // Create instances of Poll for different polls and surveys
  const poll1 = new Poll('What theme do you want Bluedit to change?', ['Red', 'Blue', 'Green']);
  const poll2 = new Poll('Choose your type of weapon during zombie apolyclipes', ['Frying pan', 'Sword', 'Gun']);
  const poll3 = new Poll('Do you think Bluedit should include politics content?',['Yes','No']);
  // Display polls on the page
  poll1.display();
  poll2.display();
  poll3.display();
  