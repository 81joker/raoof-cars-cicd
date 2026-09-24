/* Page compositions: Home, Fleet, Services */

function PageHero({ title, eyebrow, img, height = 480 }) {
  return (
    <section style={{
      backgroundImage: `linear-gradient(180deg, rgba(17,17,17,0.55) 0%, rgba(17,17,17,0.85) 100%), url('${img}')`,
      backgroundSize: 'cover', backgroundPosition: 'center',
      minHeight: height,
      display: 'flex', alignItems: 'center', justifyContent: 'center',
      color: 'white', textAlign: 'center', paddingBlock: 60,
    }}>
      <div style={{ maxWidth: 900, padding: '0 40px' }}>
        <div style={{
          fontFamily: "'Tajawal'", fontSize: 13, fontWeight: 500,
          letterSpacing: '0.32em', color: '#D4A017',
          marginBottom: 18, textTransform: 'uppercase',
        }}>{eyebrow}</div>
        <h1 style={{
          fontFamily: "'Cairo', 'Tajawal', sans-serif",
          fontSize: 'clamp(36px, 4.8vw, 56px)',
          fontWeight: 700, margin: 0, lineHeight: 1.25,
        }}>{title}</h1>
      </div>
    </section>
  );
}

/* ========== HOME ========== */
function HomePage({ navigate }) {
  return (
    <>
      <Hero onBook={() => navigate('contact')} onFleet={() => navigate('fleet')} />
      <ServiceStrip />
      <div style={{ background: '#F5F0E8', height: 80 }} />
      <FeatureCards />
      <USPSection />
      <StatsCounter />
      <BookingForm />
    </>
  );
}

/* ========== FLEET ========== */
function FleetPage({ navigate }) {
  const panels = [
    { icon: 'briefcase', title: 'خدمة تأجير سيارة', desc: 'سيارات حديثة تلبي احتياجات رجال الأعمال — راحة، فخامة، وخصوصية.', img: 'https://images.unsplash.com/photo-1515940279136-2f419eea8051?w=1200&q=80' },
    { icon: 'plane', title: 'خدمة الاستقبال من المطار', desc: 'استقبال راقي مباشرة من بوابة الوصول، مع متابعة موعد الرحلة.', img: 'https://images.unsplash.com/photo-1556122071-e404eaedb77f?w=1200&q=80' },
    { icon: 'users', title: 'خدمة المجموعات', desc: 'حافلات صغيرة وفاناتٍ فاخرة للمجموعات والعائلات الكبيرة.', img: 'https://images.unsplash.com/photo-1464219789935-c2d9d9aba644?w=1200&q=80' },
    { icon: 'crown', title: 'خدمة VIP', desc: 'تجربة استثنائية لكبار الشخصيات — سيارات فاخرة وسائقون نخبة.', img: 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=1200&q=80' },
  ];
  return (
    <>
      <PageHero
        eyebrow="OUR FLEET"
        title="اسطول السيارات"
        img="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1800&q=80"
      />
      <FleetCards onBook={() => navigate('contact')} />
      <section style={{ background: '#F5F0E8', paddingBlock: 100 }}>
        <div style={{ maxWidth: 1300, margin: '0 auto', padding: '0 40px' }}>
          <div style={{ textAlign: 'center', marginBottom: 56 }}>
            <SectionEyebrow>خدماتنا المتنوعة</SectionEyebrow>
            <SectionTitle>اختر الخدمة التي تناسبك</SectionTitle>
          </div>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: 24 }}>
            {panels.map((p, i) => (
              <ServicePanel key={i} {...p} reverse={i % 2 === 1} />
            ))}
          </div>
        </div>
      </section>
      <StatsCounter />
    </>
  );
}

/* ========== SERVICES ========== */
function ServicesPage({ navigate }) {
  const highlights = [
    { icon: 'calendar-days', title: 'تأجير يومي', desc: 'احجز ليوم واحد بأسعار شفافة.' },
    { icon: 'map', title: 'رحلات بين المدن', desc: 'تنقل بين العواصم بكل راحة.' },
    { icon: 'map-pinned', title: 'باقات سياحية', desc: 'برامج كاملة مع إرشاد سياحي.' },
  ];
  return (
    <>
      <PageHero
        eyebrow="WHAT WE OFFER"
        title="خدماتنا الفاخرة في جميع أنحاء أوروبا"
        img="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1800&q=80"
      />
      <section style={{ background: '#F5F0E8', paddingBlock: 100 }}>
        <div style={{ maxWidth: 1200, margin: '0 auto', padding: '0 40px' }}>
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3, 1fr)', gap: 24 }}>
            {highlights.map((h, i) => (
              <div key={i} style={{
                background: '#111111', color: '#F5F0E8',
                padding: 36, textAlign: 'right',
                border: '1px solid rgba(212,160,23,0.25)',
              }}>
                <div style={{
                  width: 56, height: 56,
                  border: '1px solid #D4A017', color: '#D4A017',
                  display: 'flex', alignItems: 'center', justifyContent: 'center',
                  marginBottom: 24,
                }}><Icon name={h.icon} size={26} /></div>
                <h3 style={{
                  fontFamily: "'Cairo'", fontSize: 22, fontWeight: 700,
                  color: '#D4A017', margin: '0 0 12px',
                }}>{h.title}</h3>
                <p style={{ fontFamily: "'Tajawal'", fontSize: 15, lineHeight: 1.75, color: 'rgba(255,255,255,0.72)', margin: 0 }}>{h.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>
      <USPSection />
      <BookingForm />
    </>
  );
}

window.HomePage = HomePage;
window.FleetPage = FleetPage;
window.ServicesPage = ServicesPage;
