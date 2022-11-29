(window.webpackJsonp=window.webpackJsonp||[]).push([[256],{586:function(t,n,o){"use strict";o.r(n);var l=o(6),s=Object(l.a)({},(function(){var t=this,n=t.$createElement,o=t._self._c||n;return o("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[o("h1",{attrs:{id:"custom-tooltip-content"}},[o("a",{staticClass:"header-anchor",attrs:{href:"#custom-tooltip-content"}},[t._v("#")]),t._v(" Custom Tooltip Content")]),t._v(" "),o("p",[t._v("This sample shows how to use the tooltip callbacks to add additional content to the tooltip.")]),t._v(" "),o("chart-editor",{attrs:{code:"// <block:footer:2>\nconst footer = (tooltipItems) => {\n  let sum = 0;\n\n  tooltipItems.forEach(function(tooltipItem) {\n    sum += tooltipItem.parsed.y;\n  });\n  return 'Sum: ' + sum;\n};\n\n// </block:footer>\n\n// <block:setup:1>\nconst DATA_COUNT = 7;\nconst NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100, decimals: 0};\nconst data = {\n  labels: Utils.months({count: DATA_COUNT}),\n  datasets: [\n    {\n      label: 'Dataset 1',\n      data: Utils.numbers(NUMBER_CFG),\n      fill: false,\n      borderColor: Utils.CHART_COLORS.red,\n      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),\n    },\n    {\n      label: 'Dataset 2',\n      data: Utils.numbers(NUMBER_CFG),\n      fill: false,\n      borderColor: Utils.CHART_COLORS.blue,\n      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),\n    },\n  ]\n};\n// </block:setup>\n\n// <block:config:0>\nconst config = {\n  type: 'line',\n  data: data,\n  options: {\n    interaction: {\n      intersect: false,\n      mode: 'index',\n    },\n    plugins: {\n      tooltip: {\n        callbacks: {\n          footer: footer,\n        }\n      }\n    }\n  }\n};\n// </block:config>\n\nmodule.exports = {\n  actions: [],\n  config: config,\n};\n"}}),o("h2",{attrs:{id:"docs"}},[o("a",{staticClass:"header-anchor",attrs:{href:"#docs"}},[t._v("#")]),t._v(" Docs")]),t._v(" "),o("ul",[o("li",[o("RouterLink",{attrs:{to:"/general/data-structures.html"}},[t._v("Data structures ("),o("code",[t._v("labels")]),t._v(")")])],1),t._v(" "),o("li",[o("RouterLink",{attrs:{to:"/charts/line.html"}},[t._v("Line")])],1),t._v(" "),o("li",[o("RouterLink",{attrs:{to:"/configuration/tooltip.html"}},[t._v("Tooltip")]),t._v(" "),o("ul",[o("li",[o("RouterLink",{attrs:{to:"/configuration/tooltip.html#tooltip-callbacks"}},[t._v("Tooltip Callbacks")])],1)])],1)])],1)}),[],!1,null,null,null);n.default=s.exports}}]);