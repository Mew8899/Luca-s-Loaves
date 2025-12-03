<?php
  $pageContent = "contentPages/contentAboutUs.php";
  include("templates/template.php");
?>
<script type="text/javascript">
  setPageTitle("About Us");
  const thisMainSection = document.querySelector("main");

  // 1. About Luca's Loaves – statement of purpose
  let imageContainer  = createContainerImage("images/aboutUs/baguettes-2561_1280.jpg"),
      textContainer = createContainerText({
        h3: "About Luca's Loaves",
        p: "We make real bread from the best organic ingredients – by hand, with dedication and with the best of care. Luca’s Loaves is an artisan sourdough bakery that has grown steadily over the last two years and now serves the local community from our store in Pitt Street, Sydney."
      }),
      container = createContainerWithTwoColumns(imageContainer, textContainer);
  thisMainSection.appendChild(container);

  // 2. Why Choose Luca's Loaves? – key sourdough facts
  imageContainer  = createContainerImage("images/aboutUs/baguette-2241095_1280.jpg");
  textContainer = createContainerText({
    h3: "Why Choose Luca's Loaves?",
    p: "Our sourdough is carefully prepared over many hours, using traditional methods and simple, high quality ingredients. This makes it easier to digest than most store-bought bread.",
    ul: [
      "No store / commercial yeast",
      "Hand kneaded and shaped in-house",
      "Prepared over 14–17 hours",
      "Organic flour and filtered water",
      "Oven powered using solar electricity",
      "Much easier to digest than standard store-bought bread"
    ]
  });
  container = createContainerWithTwoColumns(textContainer, imageContainer);
  thisMainSection.appendChild(container);

  // 3. About Luca – personal story
  imageContainer  = createContainerImage("images/aboutUs/bread-2649971_1280.jpg");
  textContainer = createContainerText({
    h3: "About Luca",
    p: "Luca first worked as a lifeguard but was laid off. During this time he discovered a passion for baking sourdough bread. He experimented with recipes, shared his bread with friends and neighbours, and in no time at all had built up a thriving business based on quality, care and genuine love for real bread."
  });
  container = createContainerWithTwoColumns(imageContainer, textContainer);
  thisMainSection.appendChild(container);

  // 4. Our Bakery & Opening Hours – business details from case study
  imageContainer  = createContainerImage("images/aboutUs/bakery-1868925_1280.jpg");
  textContainer = createContainerText({
    h3: "Our Bakery & Opening Hours",
    p: "Luca’s Loaves currently focuses on the local area, offering fresh sourdough every day of the week from our Sydney store.",
    ul: [
      "Address: 123 Pitt Street, Sydney NSW 2000",
      "Opening hours: 7:00am to 4:00pm (7 days a week)",
      "Phone: 9000 1234",
      "Email: info@lucasloaves.com.au",
      "Capture area: Local customers and visitors to the CBD"
    ]
  });
  container = createContainerWithTwoColumns(textContainer, imageContainer);
  thisMainSection.appendChild(container);
</script>
