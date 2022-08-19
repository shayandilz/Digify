import gsap from "gsap";
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger';
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";
import CSSRulePlugin from "gsap/CSSRulePlugin";

gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin, CSSRulePlugin)
MorphSVGPlugin.defaultType = "linear";


$(function () {

    gsap.registerPlugin(ScrollTrigger);
    let sections = gsap.utils.toArray("section");

    sections.forEach((section) => {
        let title = section.querySelector(".card-up");
        gsap
            .timeline({
                scrollTrigger: {
                    trigger: section,
                    start: "top center",
                    end: "bottom center",
                    scrub: true,
                    markers: true
                }
            })
            .fromTo(title, {translateY: 0},{translateY: -130})
    });

    // let rule = CSSRulePlugin.getRule(".first-circle")
    //
    // let lineSVG = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".svg-draw",
    //         start: "-500px center",
    //         end: "50px center",
    //         scrub: true,
    //         markers: true
    //     }
    // })
    // lineSVG.fromTo('#star-path', 0.3, {drawSVG: "0%"}, {drawSVG: "100%"});
    // lineSVG.to(rule, {duration: 1, cssRule: {borderColor: "#000"}});

})
