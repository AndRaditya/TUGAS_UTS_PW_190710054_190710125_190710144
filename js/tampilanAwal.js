// $(window).on("load",function() {
//     function fade(pageLoad) {
//       var windowTop=$(window).scrollTop(), windowBottom=windowTop+$(window).innerHeight();
//       var min=0.3, max=0.7, threshold=0.01;
      
//       $(".fade").each(function() {
//         /* Check the location of each desired element */
//         var objectHeight=$(this).outerHeight(), objectTop=$(this).offset().top, objectBottom=$(this).offset().top+objectHeight;
        
//         /* Fade element in/out based on its visible percentage */
//         if (objectTop < windowTop) {
//           if (objectBottom > windowTop) {$(this).fadeTo(0,min+((max-min)*((objectBottom-windowTop)/objectHeight)));}
//           else if ($(this).css("opacity")>=min+threshold || pageLoad) {$(this).fadeTo(0,min);}
//         } else if (objectBottom > windowBottom) {
//           if (objectTop < windowBottom) {$(this).fadeTo(0,min+((max-min)*((windowBottom-objectTop)/objectHeight)));}
//           else if ($(this).css("opacity")>=min+threshold || pageLoad) {$(this).fadeTo(0,min);}
//         } else if ($(this).css("opacity")<=max-threshold || pageLoad) {$(this).fadeTo(0,max);}
//       });
//     } fade(true); //fade elements on page-load
//     $(window).scroll(function(){fade(false);}); //fade elements on scroll
//   });

// function FadeInSection(props) {
//     const [isVisible, setVisible] = React.useState(true);
//     const domRef = React.useRef();
//     React.useEffect(() => {
//       const observer = new IntersectionObserver(entries => {
//         entries.forEach(entry => setVisible(entry.isIntersecting));
//       });
//       observer.observe(domRef.current);
//       return () => observer.unobserve(domRef.current);
//     }, []);
//     return (
//       <div
//         className={`fade-in-section ${isVisible ? 'is-visible' : ''}`}
//         ref={domRef}
//       >
//         {props.children}
//       </div>
//     );
//   }