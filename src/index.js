import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import { initNavbar } from "./scripts/navbar"
import { initFooter } from "./scripts/footer"
import React from "react"
import ReactDOM from "react-dom/client"

// 👇 Importamos el chatbot
import UrenaRoofingChatbot from "./scripts/UrenaRoofingChatbot"

// 👇 Importamos el badge de GAF
import GafBadge from "./scripts/GafBadge"

const person1 = new Person("Brad")
if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

document.addEventListener("DOMContentLoaded", () => {
  initNavbar()
  initFooter()

  // 👇 Renderizamos el chatbot en todo el sitio
  let chatbotContainer = document.getElementById("urenas-chatbot")
  if (!chatbotContainer) {
    chatbotContainer = document.createElement("div")
    chatbotContainer.id = "urenas-chatbot"
    document.body.appendChild(chatbotContainer)
  }
  const chatbotRoot = ReactDOM.createRoot(chatbotContainer)
  chatbotRoot.render(<UrenaRoofingChatbot />)

  // 👇 Renderizamos el badge de GAF en todo el sitio
  let gafBadgeContainer = document.getElementById("urena-gaf-badge")
  if (!gafBadgeContainer) {
    gafBadgeContainer = document.createElement("div")
    gafBadgeContainer.id = "urena-gaf-badge"
    document.body.appendChild(gafBadgeContainer)
  }
  const gafBadgeRoot = ReactDOM.createRoot(gafBadgeContainer)
  gafBadgeRoot.render(<GafBadge />)
})