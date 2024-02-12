

// barChart of sales
let barCtx_sale = document.getElementById("barChart-sale");
let barConfig_sale = {
    type: 'bar',
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red", "Blue", "Yellow", "Green"],
    datasets: [{
        data: [10, 19, 6, 8, 2, 11, 3, 5, 7, 9],
        label: 'label',
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        '#800080',
        '#ffa500',
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        ],
        borderWidth: 1,
    }]
    },
};
let barChart_sale = new Chart(barCtx_sale, barConfig_sale);

// barChart of profit
let barCtx_profit = document.getElementById("barChart-profit");
let barConfig_profit = {
    type: 'bar',
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red", "Blue", "Yellow", "Green"],
    datasets: [{
        data: [10, 19, 6, 8, 2, 11, 3, 5, 7, 9],
        label: 'label',
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        '#800080',
        '#ffa500',
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        ],
        borderWidth: 1,
    }]
    },
};
let barChart_profit = new Chart(barCtx_profit, barConfig_profit);

// barChart of ranking
let barCtx_ranking = document.getElementById("barChart-ranking");
let barConfig_ranking = {
    type: 'bar',
    aspectRatio: 1,  // 横幅を縦幅の1倍にする
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        data: [10, 19, 6, 8, 2, 11],
        label: 'label',
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        '#800080',
        '#ffa500',
        ],
        borderWidth: 1,
    }]
    },
};
let barChart_ranking = new Chart(barCtx_ranking, barConfig_ranking);

// doughnutChart of Inventory
let doughnutCtx_inventory = document.getElementById("doughnutChart-inventory");
let doughnutConfig_inventory = {
    type: 'doughnut',
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red", "Blue", "Yellow", "Green"],
    datasets: [{
        data: [10, 19, 6, 8, 2, 11, 3, 5, 7, 9],
        label: 'label',
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        '#800080',
        '#ffa500',
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        ],
        hoverOffset: 4
    }]
    },
};
let doughnutChart_inventory = new Chart(doughnutCtx_inventory, doughnutConfig_inventory);

// Display the dropdown's selected menu
$(function(){
    $('.dropdown-menu .dropdown-item').click(function(){
        var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
        visibleItem.text($(this).attr('value'));
    });
});

// Display the dropdown's selected menu
$(function(){
    $('.display button').click(function (e) {
        let display = $(e.target).attr('id');
        if (display === 'ranking-nav') {
            $('#mainCategory-select').addClass('d-none');
            $('#subCategory-select').addClass('d-none');
            $('#role-select').addClass('d-none');
            $('#ranking-selection').removeClass('d-none');
        } else
        {
            $('#mainCategory-select').removeClass('d-none');
            $('#subCategory-select').removeClass('d-none');
            $('#role-select').removeClass('d-none');
            $('#ranking-selection').addClass('d-none');
        }

    });
});