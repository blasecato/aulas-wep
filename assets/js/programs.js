const tabDefaultWeSeek = document.querySelector("#button-1");
const tabWeSeekEst = document.querySelector("#button-2");
if (tabDefaultWeSeek) {
  document.querySelector(`#button-1`).classList?.add("tabs__tab--active");
  document.querySelector(`#text-button-1`).classList?.add("text--active");
}

tabWeSeekEst?.addEventListener("click", () => {
  document.querySelector(`#button-1`).classList?.remove("tabs__tab--active");
  document.querySelector(`#text-button-1`).classList?.remove("text--active");

  document
    .querySelector(`#button-2`)
    .classList?.add("tabs__tab--active");
  document
    .querySelector(`#text-button-2`)
    .classList?.add("text--active");
});
tabDefaultWeSeek?.addEventListener("click", () => {
  document.querySelector(`#button-1`).classList?.add("tabs__tab--active");
  document.querySelector(`#text-button-1`).classList?.add("text--active");

  document
    .querySelector(`#button-2`)
    .classList?.remove("tabs__tab--active");
  document
    .querySelector(`#text-button-2`)
    .classList?.remove("text--active");
});

//-----------------------------------------------------------------------------------------------

const ComponentsFormation = document.querySelector("#button-component-1");
const ComponentsImplementacion = document.querySelector("#button-component-2");
const Componentsclubs = document.querySelector("#button-component-3");
const ComponentsWorkshops = document.querySelector("#button-component-4");

const handleFilterComponent = (id) => {
  const dummyList = [
    { id: 1, name: "button-component-1" },
    { id: 2, name: "button-component-2" },
    { id: 3, name: "button-component-3" },
    { id: 4, name: "button-component-4" },
  ];
  const button = document.querySelector(`#${id}`);
  const content = document.querySelector(`#content-${id}`);

  for (let index = 0; index < dummyList.length; index++) {
    if (id === dummyList[index].name) {
      button?.classList?.add("items-item--active");
      content?.classList?.add("flex--active");
    }else {
      document
      .querySelector(`#${dummyList[index].name}`)
      ?.classList?.remove("items-item--active");

      document
      .querySelector(`#content-${dummyList[index].name}`)?.classList?.remove("flex--active");
    }
  }
};

if (ComponentsFormation) {
  document
    .querySelector(`#button-component-1`)
    .classList?.add("items-item--active");
  document
    .querySelector(`#content-button-component-1`)
    .classList?.add("flex--active");
}

ComponentsFormation?.addEventListener("click", () => {
  handleFilterComponent("button-component-1");
});
ComponentsImplementacion?.addEventListener("click", () => {
  handleFilterComponent("button-component-2");
});
Componentsclubs?.addEventListener("click", () => {
  handleFilterComponent("button-component-3");
});
ComponentsWorkshops?.addEventListener("click", () => {
  handleFilterComponent("button-component-4");
});
