const tabActive = (id) => {
  const dummyList = [
    { id: 1, name: "aprendizaje-significativo" },
    { id: 2, name: "motivacion" },
    { id: 3, name: "aprender-haciendo" },
    { id: 4, name: "aprender-cooperando" },
    { id: 5, name: "desarrollo-proximo" },
    { id: 6, name: "reflexion" },
    { id: 7, name: "aprendizaje-observacion" },
  ];

  const image = document.querySelector(`.img-${id}`);
  const button = document.querySelector(`#button-tab-${id}`);
  const card = document.querySelector(`#card-${id}`);

  const idImage = `img-${id}`;

  for (let index = 0; index < dummyList.length; index++) {
    if (idImage === `img-${dummyList[index].name}`) {
      image?.classList?.add("active");
      button?.classList?.add("tab-active");
      card?.classList?.add("card-active");
    } else {
      document
        .querySelector(`.img-${dummyList[index].name}`)
        ?.classList?.remove("active");
      document
        .querySelector(`#button-tab-${dummyList[index].name}`)
        ?.classList?.remove("tab-active");
      document
        .querySelector(`#card-${dummyList[index].name}`)
        ?.classList?.remove("card-active");
    }
  }
};

const primary = document.querySelector("#button-tab-aprendizaje-significativo");
if (primary) {
  document
    .querySelector(`.img-aprendizaje-significativo`)
    .classList?.add("active");
  document
    .querySelector(`#button-tab-aprendizaje-significativo`)
    .classList?.add("tab-active");
  document
    .querySelector(`#card-aprendizaje-significativo`)
    .classList?.add("card-active");
}

document
  .querySelector("#button-tab-aprendizaje-significativo")
  ?.addEventListener("click", () => {
    tabActive("aprendizaje-significativo");
  });
document
  .querySelector("#button-tab-motivacion")
  ?.addEventListener("click", () => {
    tabActive("motivacion");
  });
document
  .querySelector("#button-tab-aprender-haciendo")
  ?.addEventListener("click", () => {
    tabActive("aprender-haciendo");
  });
document
  .querySelector("#button-tab-aprender-cooperando")
  ?.addEventListener("click", () => {
    tabActive("aprender-cooperando");
  });
document
  .querySelector("#button-tab-desarrollo-proximo")
  ?.addEventListener("click", () => {
    tabActive("desarrollo-proximo");
  });
document
  .querySelector("#button-tab-reflexion")
  ?.addEventListener("click", () => {
    tabActive("reflexion");
  });
document
  .querySelector("#button-tab-aprendizaje-observacion")
  ?.addEventListener("click", () => {
    tabActive("aprendizaje-observacion");
  });
